<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PayrollDetailResource\Pages;
use App\Filament\Admin\Resources\PayrollDetailResource\RelationManagers;
use App\Models\PayrollDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PayrollDetailResource extends Resource
{
    protected static ?string $model = PayrollDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('employee_id')
                    ->required()
                    ->relationship('employee.user', 'name'),
                Forms\Components\Select::make('master_payroll_id')
                    ->required()
                    ->relationship('masterpayroll', 'name'),
                Forms\Components\Select::make('master_bpjs_id')
                    ->required()
                    ->relationship('masterbpjs', 'name'),
                Forms\Components\Select::make('master_pajak_id')
                    ->required()
                    ->relationship('masterpajak', 'name'),
                Forms\Components\TextInput::make('total_gaji')
                    ->disabled()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('employee.user.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('masterpayroll')
                    ->sortable(),
                Tables\Columns\TextColumn::make('masterbpjs.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('masterpajak.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_gaji')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayrollDetails::route('/'),
            'create' => Pages\CreatePayrollDetail::route('/create'),
            'edit' => Pages\EditPayrollDetail::route('/{record}/edit'),
        ];
    }
}
